Soru 1: Asal Sayı Kontrolü
java
Kopyala
Düzenle
public static boolean isPrime(int number) {
    if (number <= 1) return false;
    for (int i = 2; i <= Math.sqrt(number); i++) {
        if (number % i == 0) return false;
    }
    return true;
}
Soru 2: Dizi İçindeki Çift Sayıların Ortalaması
java
Kopyala
Düzenle
public static double averageOfEvenNumbers(int[] arr) {
    int sum = 0, count = 0;
    for (int num : arr) {
        if (num % 2 == 0) {
            sum += num;
            count++;
        }
    }
    return count == 0 ? 0 : (double) sum / count;
}
Soru 3: Palindrom Kelime Kontrolü
java
Kopyala
Düzenle
public static boolean isPalindrome(String word) {
    String reversed = new StringBuilder(word).reverse().toString();
    return word.equalsIgnoreCase(reversed);
}
Soru 4: Basamaklar Toplamı
java
Kopyala
Düzenle
public static int digitSum(int number) {
    int sum = 0;
    number = Math.abs(number);
    while (number > 0) {
        sum += number % 10;
        number /= 10;
    }
    return sum;
}
Soru 5: Diziyi Küçükten Büyüğe Sıralama
java
Kopyala
Düzenle
import java.util.Arrays;

public static int[] sortArray(int[] arr) {
    Arrays.sort(arr);
    return arr;
}
Soru 6: İki String'in Uzunluk Karşılaştırması
java
Kopyala
Düzenle
public static String compareStringLengths(String str1, String str2) {
    if (str1.length() > str2.length()) return str1;
    else if (str2.length() > str1.length()) return str2;
    else return "Equal length";
}
Soru 7: Fibonacci Serisinin n. Elemanı
java
Kopyala
Düzenle
public static int fibonacci(int n) {
    if (n <= 1) return n;
    int a = 0, b = 1;
    for (int i = 2; i <= n; i++) {
        int temp = a + b;
        a = b;
        b = temp;
    }
    return b;
}
Soru 8: Notu Harf Notuna Çevirme
java
Kopyala
Düzenle
public static String convertToLetterGrade(int score) {
    if (score >= 90) return "A";
    else if (score >= 80) return "B";
    else if (score >= 70) return "C";
    else if (score >= 60) return "D";
    else return "F";
}
Soru 9: Metindeki Boşluk Sayısı
java
Kopyala
Düzenle
public static int countSpaces(String text) {
    int count = 0;
    for (char ch : text.toCharArray()) {
        if (ch == ' ') count++;
    }
    return count;
}
Soru 10: Metindeki Her Harfin Sayısı
java
Kopyala
Düzenle
import java.util.HashMap;

public static HashMap<Character, Integer> countLetters(String text) {
    HashMap<Character, Integer> map = new HashMap<>();
    for (char ch : text.toCharArray()) {
        if (Character.isLetter(ch)) {
            ch = Character.toLowerCase(ch);
            map.put(ch, map.getOrDefault(ch, 0) + 1);
        }
    }
    return map;
}