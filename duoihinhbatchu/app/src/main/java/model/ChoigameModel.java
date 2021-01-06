package model;

import com.example.duoihinhbatchu.MainActivity2;

import java.util.ArrayList;

import object.CauDo;
import object.NguoiDung;

public class ChoigameModel {
    MainActivity2 c;
    ArrayList<CauDo> arr;
    int cauSo=-1;

    public NguoiDung nguoiDung;

    public ChoigameModel(MainActivity2 c){
        this.c=c;
        nguoiDung=new NguoiDung();
        taoData();
    }
    private  void taoData(){
        arr = new ArrayList<>();
        arr.add(new CauDo("","sutu","https://khothuthuat.com/wp-content/uploads/2014/09/dap-an-bat-chu-p14.png"));
        arr.add(new CauDo("","saobang","https://i.pinimg.com/originals/82/84/07/8284079e3ffa1b5f3103af9d1b0b695d.jpg"));
        arr.add(new CauDo("","cautha","https://vcdn-vnexpress.vnecdn.net/2015/05/14/1-5533-1431588390.jpg"));
        arr.add(new CauDo("","banbac","https://i1-vnexpress.vnecdn.net/2015/05/12/2-3551-1431422506.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=Og3EvCsJqvHJeE2PUal-Kg"));
        arr.add(new CauDo("Màn 1","yeuot","https://cdn.zenquiz.net/external/2016/11/09/07/744978c0-a652-11e6-940a-050901070303-compressed.jpg"));
    }
    public CauDo layCauDo()
    {
        cauSo++;
        if (cauSo>= arr.size()){
            cauSo= arr.size()-1;

        }
        return arr.get(cauSo);
    }
    public void LayThongTin(){
        nguoiDung.getTT(c);
    }
    public void luuThongTin(){
        nguoiDung.saveTT(c);
    }

}
