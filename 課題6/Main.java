package com.company;

public class Main {
    public static void main(String[] args) {
        Integer hoge = null;
        try {
            hoge.intValue();

        } catch (NullPointerException e) {
            System.out.println("ぬるぽがきたよ");
        }
        System.out.println("処理続行");
    }

    static public void throwException() throws NullPointerException {
        Integer hoge = 1;
        hoge.intValue();
    }
}
