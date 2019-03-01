package com.company;

public class Main {

    public static void main(String[] args) {
//        Monster monster = new Monster();

//        monster.name = "ピカチュウ";
//        monster.HP = 10;
//        monster.type = "ねずみポケモン";
//        monster.waza = "でんこうせっか";

        Monster monster1 = new Monster(
//                "ひとかげ",
//                20,
//                "ひのこ",
//                "とかげポケモン"
        );

        System.out.println(monster1.name);
        System.out.println("hp->"+monster1.HP);

        Monster monster2 = new Monster(
                "ピカチュウ",
                10,
                "でんこうせっか",
                "ねずみポケモン"
        );

        System.out.println(monster2.name);
        System.out.println("HP->"+monster2.HP);


        monster1.attack();
        monster2.attack();
    }
}
