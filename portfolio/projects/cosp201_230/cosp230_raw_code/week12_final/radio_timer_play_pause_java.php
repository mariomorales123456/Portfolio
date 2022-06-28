package com.example.taxbusiness;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.media.MediaPlayer;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.TextView;

import java.util.Timer;
import java.util.TimerTask;

public class radio_timer_play_pause extends AppCompatActivity {

    Button startButton, finishButton;
    MediaPlayer theLounge;
    int dependentsNum, incomeNum, netIncome;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_radio_timer_play_pause);

        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setLogo(R.mipmap.ic_launcher);
        getSupportActionBar().setDisplayUseLogoEnabled(true);

        final EditText income = (EditText)findViewById(R.id.radio_timer_income);
        final EditText dependents = (EditText)findViewById(R.id.radio_timer_depen);
        final RadioButton children = (RadioButton)findViewById(R.id.radio_timer_children);
        final RadioButton noChildren = (RadioButton)findViewById(R.id.radio_timer_no_children);
        final TextView loading = (TextView)findViewById(R.id.radio_timer_processing);
        final TextView result = (TextView)findViewById(R.id.radio_timer_result);
        startButton = (Button)findViewById(R.id.radio_timer_btn_calculate_start);
        finishButton = (Button)findViewById(R.id.radio_timer_btn_calculate_finish);
        theLounge = new MediaPlayer();
        theLounge = MediaPlayer.create(this, R.raw.thelounge);

        /*final TimerTask task = new TimerTask(){
            @Override
            public void run(){
                finish();
                finishButton.setVisibility(View.VISIBLE);
            }
        };
        final Timer opening = new Timer();
        */
        Button.OnClickListener startButtonEvent = new Button.OnClickListener(){
            @Override
            public void onClick(View v){
                theLounge.start();
                //loading.setVisibility(View.VISIBLE);
                startButton.setVisibility(View.INVISIBLE);
                //opening.schedule(task, 500);
                finishButton.setVisibility(View.VISIBLE);
            }
        };
        Button.OnClickListener finishButtonEvent = new Button.OnClickListener(){
            @Override
            public void onClick(View v){

                incomeNum = Integer.parseInt(income.getText().toString());
                dependentsNum = Integer.parseInt(dependents.getText().toString());
                netIncome = (incomeNum - (dependentsNum * 3500)) - 10000;

                theLounge.stop();
                loading.setVisibility(View.INVISIBLE);
                finishButton.setVisibility(View.INVISIBLE);

                if(netIncome > 0) {
                    if (children.isChecked()) {
                        if ((netIncome * 0.15) > 2000) {
                            result.setText("You will owe $" + ((netIncome * 0.15) - 2000));
                        }
                        else{
                            result.setText("You don't owe anything, possible refund!");
                        }
                    }
                    if (noChildren.isChecked()) {
                        result.setText("You will owe $" + netIncome * 0.15);
                    }
                }
                else {
                    result.setText("You don't owe anything!");
                }
            }
        };

        startButton.setOnClickListener(startButtonEvent);
        finishButton.setOnClickListener(finishButtonEvent);
    }
}
