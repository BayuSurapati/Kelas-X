fun main() {
    //Perulangan For Loops Array
    val nama = arrayOf("LOL","ACUMALAKA","HAHAHHAA")

    var total = 0;
    for(datanama in nama){
        println(datanama)
        total++
    }
    println("Jumlah Perulanagan = $total")

    //Perulangan For Loops Range

    for(value in 0..2){
        print(value)
        println("")
    }
    for(value in 90 downTo 30 step 3){
        print(" "+value)

    }
    println()
    //Perulangan campuran antara array dan range
    val ukuranArray = nama.size -1
    for(a in 0..ukuranArray){
        println("Index Ke $a = ${nama.get(a)}")
    }
}