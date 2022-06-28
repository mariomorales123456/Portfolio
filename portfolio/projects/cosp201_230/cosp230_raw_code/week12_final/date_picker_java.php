package com.example.taxbusiness;

import androidx.appcompat.app.AppCompatActivity;

import android.app.DatePickerDialog;
import android.app.TimePickerDialog;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.TextView;
import android.widget.TimePicker;

import java.text.DateFormat;
import java.util.Calendar;

public class date_picker extends AppCompatActivity {

    private TextView reservation;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_date_picker);

        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setLogo(R.mipmap.ic_launcher);
        getSupportActionBar().setDisplayUseLogoEnabled(true);

        reservation = (TextView)findViewById(R.id.date_picker_result);
        Button button = (Button)findViewById(R.id.date_picker_button);

        button.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View V){
                new DatePickerDialog(date_picker.this, d, c.get(Calendar.YEAR), c.get(Calendar.MONTH), c.get(Calendar.DAY_OF_MONTH)).show();
            }
        });

    }

    Calendar c = Calendar.getInstance();
    DateFormat fmtDate = DateFormat.getDateInstance();
    DatePickerDialog.OnDateSetListener d = new DatePickerDialog.OnDateSetListener(){
        @Override
        public void onDateSet(DatePicker view, int year, int month, int dayOfMonth) {
            c.set(Calendar.YEAR, year);
            c.set(Calendar.MONTH, month);
            c.set(Calendar.DAY_OF_MONTH, dayOfMonth);
            //reservation.setText("Your reservation is set for " + fmtDate.format(c.getTime()));
            new TimePickerDialog(date_picker.this, t, c.get(Calendar.HOUR_OF_DAY), c.get(Calendar.MINUTE), false).show();
        }
    };

    TimePickerDialog.OnTimeSetListener t = new TimePickerDialog.OnTimeSetListener(){
        @Override
        public void onTimeSet(TimePicker view, int hourOfDay, int minute){
            c.set(Calendar.HOUR_OF_DAY, hourOfDay);
            c.set(Calendar.MINUTE, minute);
            String amPm, extraZero = "";
            if (hourOfDay >= 12){
                amPm = "PM";
                if (hourOfDay > 12){
                    hourOfDay -= 12;
                }
            }
            else {
                amPm = "AM";
            }
            if (minute < 10){
                extraZero = "0";
            }
            reservation.setText("Your appointment is set for " + fmtDate.format(c.getTime()) + " at " + hourOfDay + ":" + extraZero + minute + " " + amPm);
        }
    };

}
