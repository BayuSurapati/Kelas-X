fun main() {
    val hasilUjian = 'B'

    when(hasilUjian){
        'A' -> {
            println("Very Gud")
        }
        'B' -> {
            println("Gud")
        }
        'C' -> {
            println("Ok")
        }
        'D' -> {
            println("Bad")
        }
        'E' -> {
            println("Very Bad")
        }
        else -> {
            println("LOL")
        }
    }

    val nilaiUKL = 'C'
    when(nilaiUKL){
        'A','B','C'->{
            println("Anda Lulus UKL")
        }else->{
            println("Anda tidak Lulus UKL")
        }
    }

    val finalUjianHarian = 'D'
    val hasilFinal = arrayOf('A','B','C')

    when(finalUjianHarian){
        in hasilFinal -> println("LULUS UJIAN POLL")
        !in hasilFinal -> println("TIDAK LULUS POLL")
    }

    val nama = "Nyoman"
    when(nama){
        is String -> println("Ya ini String")
        !is String -> println("Ini Bukan String")
    }

    val jmlKodingan = 6
    when{
        jmlKodingan > 9 -> println("Very Gud Kodingan")
        jmlKodingan > 5 -> println("Gud Kodingan")
        else -> println("Where is Your Kodingan?")
    }
}