        import java.util.Scanner;
        import java.util.Random;

public class Shindan {
    public static void main(String[] args) {
        String[] questions = {"ゲームが好きだ",
                "アニメが好き",
                "かめはめ波を練習したことがある",
                "お風呂で髪の毛を逆立てて『スーパーサイヤ人』をやったことがある",
                "週に一冊は漫画を読む"};
        Scanner scanner = new Scanner(System.in);

        Random random = new Random();

        int sum = 0;
        int answer_count = 0;
        int input_num = 0;
        int rand_num = 0;

        for (int i = 0; i < questions.length; i++) {
            rand_num = random.nextInt(questions.length);
            System.out.println(questions[rand_num]);
            System.out.println("1: あてはまらない 2: あまりあてはらまらない 3: まあまああてはまる 4: あてはまる");

            input_num = scanner.nextInt();

            if (input_num == 99) {
                break;
            }

            sum += input_num;
            answer_count++;
        }

        System.out.println("診断結果");
        if (sum <= 4 * answer_count && sum > 3 * answer_count) {
            System.out.println("あなたと私の相性は親友、いや！マブダチ！！！！");
        } else if (sum <= 3 * answer_count && sum > 2 * answer_count) {
            System.out.println("あなたと私の相性は友達レベル");
        } else if (sum <= 2 * answer_count && sum > 1 * answer_count) {
            System.out.println("あなたと私の相性は…；。まずはお友達から...");
        } else {
            System.out.println("あなたと私の相性は最悪。相容れない壁を感じます。");
        }
    }
}