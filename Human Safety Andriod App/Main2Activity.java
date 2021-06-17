package com.sdmcet.majorproject;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class Main2Activity extends AppCompatActivity {
TextView link2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        link2 = (TextView) findViewById(R.id.editText8);
        link2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(Main2Activity.this, MainActivity.class);
                startActivity(intent);
                //Toast.makeText(Main2Activity.this,"back to login page",Toast.LENGTH_LONG).show();
            }
        });
        Button signin = findViewById(R.id.button3);
        signin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                openActivity5();
            }
        });
    }
        public void openActivity5(){
            Intent intent=new Intent(this,Main4Activity.class);
            startActivity(intent);
        }


}
