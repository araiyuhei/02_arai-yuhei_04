package com.company;

public class Monster {
    public String name;
    public int HP;
    public String waza;
    public String type;

    public Monster() {
//        System.out.println("モンスターオブジェクトがつくられたぜ！！！！");
        name = "ピカチュウ";
        HP = 10;
        type = "ねずみポケモン";
        waza = "でんこうせっか";
    }
    public Monster(String input_name, int input_HP,String input_waza,String input_type){
        name = input_name;
        HP = input_HP;
        type = input_type;
        waza = input_waza;
        }



    public void attack(){
        System.out.println(name + "は" + waza + "を繰り出した！");
    }
}
