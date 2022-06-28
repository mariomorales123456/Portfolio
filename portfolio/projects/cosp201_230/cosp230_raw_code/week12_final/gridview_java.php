package com.example.taxbusiness;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.os.Bundle;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.BaseAdapter;
import android.widget.GridView;
import android.widget.ImageView;
import android.widget.Toast;

public class gridview extends AppCompatActivity {

    Integer[] documents = {R.drawable.grid1, R.drawable.grid2, R.drawable.grid3,
            R.drawable.grid4, R.drawable.grid5, R.drawable.grid6};
    ImageView pic;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_gridview);

        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setLogo(R.mipmap.ic_launcher);
        getSupportActionBar().setDisplayUseLogoEnabled(true);

        GridView grid = (GridView)findViewById(R.id.gridView);
        final ImageView pic = (ImageView)findViewById(R.id.imgLarge);

        grid.setAdapter(new ImageAdapter(this));

        grid.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                Toast.makeText(getBaseContext(), "Selected Document " + (position+1),
                        Toast.LENGTH_SHORT).show();
                pic.setImageResource(documents[position]);
            }
        });

    }

    public class ImageAdapter extends BaseAdapter {
        private Context context;
        public ImageAdapter(Context c) {
            context = c;
        }

        @Override
        public int getCount() {
            return documents.length;
        }

        @Override
        public Object getItem(int position) {
            return null;
        }

        public long getItemId(int position) {
            return 0;
        }

        @Override
        public View getView(int position, View convertView, ViewGroup parent) {
            pic = new ImageView(context);
            pic.setImageResource(documents[position]);
            pic.setScaleType(ImageView.ScaleType.FIT_XY);
            pic.setLayoutParams(new GridView.LayoutParams(500,300));
            return pic;
        }
    } //end class ImageAdapter

}
