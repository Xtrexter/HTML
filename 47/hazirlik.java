soru 1 
public class Main {
    public static void main(String[] args) {
        int sayi = 10;
        System.out.println("Sayi: " + sayi);
    }
}

Soru 2
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Birinci sayiyi girin: ");
        int sayi1 = scanner.nextInt();
        System.out.print("Ikinci sayiyi girin: ");
        int sayi2 = scanner.nextInt();

        int toplam = sayi1 + sayi2;
        System.out.println("Toplam: " + toplam);
    }
}

Soru 3 
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Bir karakter girin: ");
        char ch = scanner.next().toLowerCase().charAt(0);

        if (ch == 'a' || ch == 'e' || ch == 'i' || ch == 'o' || ch == 'u') {
            System.out.println("Sesli harf");
        } else {
            System.out.println("Sesli harf degil");
        }
    }
}

Soru 4
public class Soru4 {
    public static void main(String[] args) {
        for (int i = 1; i <= 100; i++) {
            if (i % 2 == 0) {
                System.out.print(i + " ");
            }
        }
    }
}
