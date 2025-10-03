Soru 1: Bir tam sayı değişkeni tanımlayıp ekrana yazdırmak

public class Soru1 {
    public static void main(String[] args) {
        int sayi = 42;
        System.out.println("Sayi: " + sayi);
    }
}
Soru 2: Kullanıcıdan iki sayı alıp toplamını yazdırmak

import java.util.Scanner;

public class Soru2 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Birinci sayiyi girin: ");
        int sayi1 = input.nextInt();
        System.out.print("Ikinci sayiyi girin: ");
        int sayi2 = input.nextInt();
        int toplam = sayi1 + sayi2;
        System.out.println("Toplam: " + toplam);
    }
}
Soru 3: Bir karakterin sesli harf olup olmadığını kontrol etmek

import java.util.Scanner;

public class Soru3 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Bir karakter girin: ");
        char ch = input.next().toLowerCase().charAt(0);

        if (ch == 'a' || ch == 'e' || ch == 'i' || ch == 'o' || ch == 'u') {
            System.out.println("Sesli harf.");
        } else {
            System.out.println("Sesli harf degil.");
        }
    }
}
Soru 4: 1’den 100’e kadar çift sayıları yazdırmak

public class Soru4 {
    public static void main(String[] args) {
        for (int i = 2; i <= 100; i += 2) {
            System.out.println(i);
        }
    }
}
Soru 5: Sayının pozitif, negatif veya sıfır olduğunu belirlemek
java
Kopyala
Düzenle
import java.util.Scanner;

public class Soru5 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Bir sayi girin: ");
        int sayi = input.nextInt();

        if (sayi > 0)
            System.out.println("Pozitif sayi");
        else if (sayi < 0)
            System.out.println("Negatif sayi");
        else
            System.out.println("Sifir");
    }
}
Soru 6: Bir dizideki en büyük sayıyı bulmak
java
Kopyala
Düzenle
public class Soru6 {
    public static void main(String[] args) {
        int[] dizi = {10, 25, 32, 5, 17};
        int max = dizi[0];

        for (int i = 1; i < dizi.length; i++) {
            if (dizi[i] > max) {
                max = dizi[i];
            }
        }

        System.out.println("En buyuk sayi: " + max);
    }
}
Soru 7: Bir metni ters çevirmek
java
Kopyala
Düzenle
import java.util.Scanner;

public class Soru7 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Bir metin girin: ");
        String metin = input.nextLine();
        String ters = new StringBuilder(metin).reverse().toString();

        System.out.println("Ters metin: " + ters);
    }
}
Soru 8: Sayının faktöriyelini hesaplayan metot
java
Kopyala
Düzenle
public class Soru8 {
    public static int faktoriyel(int n) {
        int sonuc = 1;
        for (int i = 1; i <= n; i++) {
            sonuc *= i;
        }
        return sonuc;
    }

    public static void main(String[] args) {
        System.out.println("5! = " + faktoriyel(5));
    }
}
Soru 9: “Merhaba Dunya” mesajını 5 kez yazdırmak (while döngüsüyle)
java
Kopyala
Düzenle
public class Soru9 {
    public static void main(String[] args) {
        int i = 0;
        while (i < 5) {
            System.out.println("Merhaba Dunya");
            i++;
        }
    }
}
Soru 10: Öğrencinin not ortalamasını hesaplayan program
java
Kopyala
Düzenle
import java.util.Scanner;

public class Soru10 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        double toplam = 0;
        int dersSayisi;

        System.out.print("Ders sayisini girin: ");
        dersSayisi = input.nextInt();

        for (int i = 1; i <= dersSayisi; i++) {
            System.out.print(i + ". notu girin: ");
            double not = input.nextDouble();
            toplam += not;
        }

        double ortalama = toplam / dersSayisi;
        System.out.println("Not ortalamasi: " + ortalama);
    }
}