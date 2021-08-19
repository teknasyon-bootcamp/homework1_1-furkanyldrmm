<?php

$age = 25;

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */

if ($age >= 0) {
    switch ($age) {
        case $age >= 0 && $age <= 14:
            echo "Çocuk";
            break;
        case $age > 14 && $age <= 24:
            echo "Genç";
            break;
        case $age > 24 && $age <= 64:
            echo "Yetişkin";
            break;

        default:
            echo "Yaşlı";
            break;
    }
}
