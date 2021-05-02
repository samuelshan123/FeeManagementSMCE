package in.samuel.feemanagementsmce;

import android.content.Intent;

import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class ProfileActivity extends AppCompatActivity {

    TextView textViewId, textViewUsername, textViewregno, textViewdob,textViewtotal;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_profile);

        //if the user is not logged in
        //starting the login activity
        if (!SharedPrefManager.getInstance(this).isLoggedIn()) {
            finish();
            startActivity(new Intent(this, MainActivity.class));
        }



        textViewUsername = (TextView) findViewById(R.id.textViewUsername);
        textViewregno = (TextView) findViewById(R.id.textregno);

        textViewtotal=(TextView)findViewById(R.id.texttotal);


        //getting the current user
        User user = SharedPrefManager.getInstance(this).getUser();

        //setting the values to the textviews

        textViewUsername.setText(user.getUsername());
        textViewregno.setText(user.getRegno());

        textViewtotal.setText(user.getTotal());

        //when the user presses logout button
        //calling the logout method
        findViewById(R.id.buttonLogout).setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                finish();
                SharedPrefManager.getInstance(getApplicationContext()).logout();
            }
        });
    }
}