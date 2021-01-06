package com.example.duoihinhbatchu;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Adapter;
import android.widget.AdapterView;
import android.widget.GridView;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.bumptech.glide.Glide;

import Adapter.dapanAdapter;
import model.ChoigameModel;
import object.CauDo;

import java.util.ArrayList;
import java.util.Random;

public class MainActivity2 extends AppCompatActivity {
    CauDo cauDo;
    ChoigameModel model;
    private String DapAn ="caheo";
    ArrayList<String> arrCautraloi;
    GridView gdvCautraloi;
    int index=0;

    ArrayList<String> arrDapAn;
    GridView gdvDapAn;
    ImageView imgAnhCauDo;
    TextView txtTienNguoiDung;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        init();
        anhXa();
        setOnClick();
        HienCauDo();
    }
//anh xa cac item tren man hinh
    private  void anhXa(){
        gdvCautraloi = findViewById(R.id.gdvCautraloi);
        gdvDapAn = findViewById(R.id.gdvDapAn);
        imgAnhCauDo = findViewById(R.id.imgAnhCauDo);
        txtTienNguoiDung = findViewById(R.id.txtTienNguoiDung);

    }
    //khoi tao data khi moi len
    private  void init(){
        model = new ChoigameModel(this);
        arrCautraloi = new ArrayList<>();

        arrDapAn= new ArrayList<>();

    }
    //dap an =
    private  void HienCauDo(){
        cauDo = model.layCauDo();
        DapAn= cauDo.dapAn;
        banData();
        hienThiCauTraLoi();
        hienThiDapAn();
        Glide.with(this)
                .load(cauDo.anh)
                .into(imgAnhCauDo);
        model.LayThongTin();
        txtTienNguoiDung.setText(model.nguoiDung.tien+"$");

    }
//day cau tra loi len man hinh cho minh
    private  void hienThiCauTraLoi(){
        gdvCautraloi.setNumColumns(arrCautraloi.size());
        gdvCautraloi.setAdapter(new dapanAdapter(this,0,arrCautraloi));

    }
    private  void hienThiDapAn(){
        gdvDapAn.setNumColumns(arrDapAn.size()/2);
        gdvDapAn.setAdapter(new dapanAdapter(this,0,arrDapAn));

    }
    //dap an tach tung ki tu
    private void banData(){
        index =0;
        arrCautraloi.clear();
        arrDapAn.clear();
        Random r = new Random();
        for(int i=0;i< DapAn.length();i++){
            arrCautraloi.add("");
            String s = ""+ (char)(r.nextInt(26)+65);
            arrDapAn.add(s);
            String s1 = ""+ (char)(r.nextInt(26)+65);
            arrDapAn.add(s1);
        }
        for(int i=0;i< DapAn.length();i++){
            String s = ""+DapAn.charAt(i);
            arrDapAn.set(i,s.toUpperCase());
        }
        for(int i = 0; i <arrDapAn.size(); i++)
        {
            String s = arrDapAn.get(i);
            //tao ra so tu 0 -6 , vi tri van nao trong dap an
            int vt = r.nextInt(arrDapAn.size());
            // xet vi tri i
            arrDapAn.set(i,arrDapAn.get(vt));
            arrDapAn.set(vt,s);
        }
    }
    private void setOnClick()
    {
        gdvDapAn.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                String s = (String) parent.getItemAtPosition(position);
                if (s.length()!=0 && index<arrCautraloi.size())
                {
//                    if (arrCautraloi.get(index).length()!=0){return;}
                    for(int i =0;i<arrCautraloi.size();i++){
                        if (arrCautraloi.get(i).length()==0){
                            index=i;
                            break;
                        }
                    }
                    arrDapAn.set(position,"");
                    arrCautraloi.set(index,s);
                    index++;
                    hienThiCauTraLoi();
                    hienThiDapAn();
                    CheckWin();
                }
            }
        });
        gdvCautraloi.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                String s = (String)parent.getItemAtPosition(position);
                if (s.length()!=0)
                {
                    index =position;
                    arrCautraloi.set(position,"");
                    for (int i =0; i <arrDapAn.size();i++)
                    {
                        if (arrDapAn.get(i).length()==0)
                        {
                            arrDapAn.set(i,s);
                            break;
                        }
                    }
                    hienThiCauTraLoi();
                    hienThiDapAn();
                }
            }
        });
    }
    private void CheckWin(){
        String s ="";
        for (String s1:arrCautraloi){
             s=s+s1;
        }
        s=s.toUpperCase();
        if(s.equals(DapAn.toUpperCase())){
            Toast.makeText(this,"Ban Da Chien Thang",Toast.LENGTH_SHORT).show();
            model.LayThongTin();
            model.nguoiDung.tien=model.nguoiDung.tien+10;
            model.luuThongTin();
            HienCauDo();
        }
    }
    public void MoGoiY(View view) {
        model.LayThongTin();
        if (model.nguoiDung.tien < 5) {
            Toast.makeText(this, "Ban Da Het Tien", Toast.LENGTH_SHORT).show();
            return;
        }
//kiem tra xem nguoi su dung chua solve duoc o nao
        int id = -1;
        for (int i = 0; i < arrCautraloi.size(); i++) {
            //cau tra loi = rong,0
            if (arrCautraloi.get(i).length() == 0) {

                id = i;
                break;
            }
        }
        if (id==-1)
        {
            for (int i = 0; i < arrCautraloi.size(); i++) {
                String s = DapAn.toUpperCase().charAt(i)+"";
                if (!arrCautraloi.get(i).toUpperCase().equals(s)) {

                    id = i;
                    break;
                }
            }
            for (int i = 0; i < arrDapAn.size(); i++) {
                //lay chu sai nhet xuong ben duoi
                if (arrDapAn.get(i).length() == 0) {
                    arrDapAn.set(i, arrCautraloi.get(id));
                    break;

                }
            }
        }
        String goiY = "" + DapAn.charAt(id);
        goiY = goiY.toUpperCase();
        //kiem tra ky tu trung
        for(int i =0;i<arrCautraloi.size();i++ )
        {
            if (arrCautraloi.get(i).toUpperCase().equals(goiY)) {

                arrCautraloi.set(i,"");
                break;
            }
        }
        //khong tim ra cau tra loi cua nguoi dung nao bi trong => Bug


        for (int i = 0; i < arrDapAn.size(); i++) {
            if (goiY.equals(arrDapAn.get(i))) {
                arrDapAn.set(i, "");
                break;
            }
        }

        arrCautraloi.set(id, goiY)  ;
        hienThiCauTraLoi();
        hienThiDapAn();
        model.LayThongTin();
        model.nguoiDung.tien = model.nguoiDung.tien - 5;
        model.luuThongTin();
        txtTienNguoiDung.setText(model.nguoiDung.tien + "$");
        //------------------------------------------------------------


        }

    public void DoiCauHoi(View view) {

        model.LayThongTin();
        if (model.nguoiDung.tien < 10) {
            Toast.makeText(this, "Ban Da Het Tien", Toast.LENGTH_SHORT).show();
            return;
        }
        model.nguoiDung.tien = model.nguoiDung.tien - 10;
        model.luuThongTin();
        txtTienNguoiDung.setText(model.nguoiDung.tien + "$");
        HienCauDo();
    }
}