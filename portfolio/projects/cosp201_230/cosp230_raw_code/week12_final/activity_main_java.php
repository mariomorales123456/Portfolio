package com.example.taxbusiness;

import androidx.appcompat.app.AppCompatActivity;

import android.app.ListActivity;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.ListView;

public class activity_main extends ListActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        //setContentView(R.layout.activity_main);

        //getSupportActionBar().setDisplayShowHomeEnabled(true);
        //getSupportActionBar().setLogo(R.mipmap.ic_launcher);
        //getSupportActionBar().setDisplayUseLogoEnabled(true);

        String[] main_array = {"Tax Business Website", "Estimate Your Taxes", "Documents You'll Need", "Make An Appointment"};
        setListAdapter(new ArrayAdapter<String>(this, R.layout.activity_main, R.id.display_list, main_array));
    }

    protected void onListItemClick(ListView l, View v, int position, long id){
        switch(position){
            case 0:
                startActivity(new Intent(Intent.ACTION_VIEW, Uri.parse("http://mariomoralesprojects.000webhostapp.com/cosw10/final_project/index.html")));
                break;
            case 1:
                startActivity(new Intent(activity_main.this, radio_timer_play_pause.class));
                break;
            case 2:
                startActivity(new Intent(activity_main.this, gridview.class));
                break;
            case 3:
                startActivity(new Intent(activity_main.this, date_picker.class));
                break;
        }
    }

}
