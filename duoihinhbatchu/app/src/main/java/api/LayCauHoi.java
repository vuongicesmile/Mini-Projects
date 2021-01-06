package api;

import android.os.AsyncTask;

import com.squareup.okhttp.OkHttpClient;
import com.squareup.okhttp.Request;
import com.squareup.okhttp.Response;
import com.squareup.okhttp.ResponseBody;

import java.io.IOException;


public class LayCauHoi extends AsyncTask<Void, Void, Void>  {
        String data;

    @Override
        protected Void doInBackground(Void... voids) {
            OkHttpClient client = new OkHttpClient();
            Request request = new Request.Builder()
                    .url("http://owo.test/duoihinhbatchu/index.php/")
                    .build();
            Response response = null;
            try {
                response = client.newCall(request).execute();
                ResponseBody responseBody = response.body();
                data = responseBody.string();
            } catch (IOException e) {
                data = null;
                e.printStackTrace();
            }
            return null;
        }

        @Override
        protected void onPostExecute(Void aVoid) {
            if (data != null) {
            } else {
            }
        }
    }

