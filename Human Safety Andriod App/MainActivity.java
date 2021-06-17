package com.sdmcet.majorproject;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.text.SpannableString;
import android.text.Spanned;
import android.text.method.LinkMovementMethod;
import android.text.style.ClickableSpan;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;
import android.content.Intent;

public class MainActivity extends AppCompatActivity {
    TextView link;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        link=(TextView)findViewById(R.id.textView2);
        link.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(MainActivity.this,Main3Activity.class);
                startActivity(intent);
                Toast.makeText(MainActivity.this,"link worked",Toast.LENGTH_LONG).show();
            }
        });

        Button btn=findViewById(R.id.button3);
        Button btn1=findViewById(R.id.button1);

        btn.setOnClickListener((new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                // Toast.makeText( MainActivity.this, "Code Sent", Toast.LENGTH_SHORT).show();
                openActivity();
            }
        }));

        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                openActivity1();
            }
        });
    }
    public void openActivity(){
        Intent intent=new Intent(this,Main4Activity.class);
        startActivity(intent);
    }

  public void openActivity1(){
        Intent intent=new Intent( this,Main2Activity.class);
        startActivity(intent);
    }

   /* TextView textView=findViewById(R.id.textView2);

    String text="Forgot Password? Click HERE";

    SpannableString ss = new SpannableString(text);

    ClickableSpan clickableSpan=new ClickableSpan() {
        @Override
        public void onClick(@NonNull View widget) {
            openActivity();
        }
    };

    /*ss.setSpan(clickableSpan,start:23 ,end:27,Spanned.SPAN_EXCLUSIVE_EXCLUSIVE);

    textView.setText(ss);
    textView.setMovementMethod(LinkMovementMethod.getInstance());
    public void openActivity2(){
        Intent intent=new Intent( this,Main4Activity.class);
        startActivity(intent);
    }

    TextView textView1=findViewById(R.id.editText8);

    String text1="Login";

    SpannableString login=new SpannableString(text1);

    ClickableSpan clickableSpan1=new ClickableSpan() {
        @Override
        public void onClick(@NonNull View widget) {
            openActivity3();
        }
    };*/

    public void openActivity3(){
        Intent intent=new Intent( this,MainActivity.class);
        startActivity(intent);
    }


}
