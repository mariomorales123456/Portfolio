package com.example.taxbusiness;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.media.MediaPlayer;
import android.os.Bundle;

import java.util.Timer;
import java.util.TimerTask;

public class splash_activity extends AppCompatActivity {

    MediaPlayer funkyElement;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.splash_activity);

        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setLogo(R.mipmap.ic_launcher);
        getSupportActionBar().setDisplayUseLogoEnabled(true);

        funkyElement = new MediaPlayer();
        funkyElement = MediaPlayer.create(this, R.raw.funkyelement);

        TimerTask task = new TimerTask(){
            @Override
            public void run(){
                finish();
                funkyElement.stop();
                startActivity(new Intent(splash_activity.this, activity_main.class));
            }
        };
        funkyElement.start();
        Timer opening = new Timer();
        opening.schedule(task, 5000);
    }
}
