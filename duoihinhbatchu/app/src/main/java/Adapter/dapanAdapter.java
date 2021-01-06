package Adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;

import com.example.duoihinhbatchu.R;

import java.util.ArrayList;
import java.util.List;

public class dapanAdapter extends ArrayAdapter<String> {
    private Context myCt;
    private ArrayList<String> arr;


    public dapanAdapter(@NonNull Context context, int resource, @NonNull List<String> objects) {
        super(context, resource, objects);
        this.myCt = context;
        this.arr=new ArrayList<>(objects);

    }
//Adapter : do list string len man hinh cho minh
    //getView lay item chen
    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        if (convertView==null)
        {
            LayoutInflater inflater = (LayoutInflater)myCt.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            convertView=inflater.inflate(R.layout.item_cautraloi,null);
        }
        TextView txtCautraloi = convertView.findViewById(R.id.txtCautraloi);
        txtCautraloi.setText(this.arr.get(position));
        return convertView;
    }
}
