fun main() {
    fun sayHello(nilai: String, transformer: (String)->String):String {
        return "Halo ${transformer(nilai)}"
    }
    val lambdaGede = {value: String -> value.toUpperCase()}
    val lambdaKecil = {value: String -> value.toLowerCase()}
    println(sayHello("joni joni", lambdaGede))
    println(sayHello("HELO HELO",lambdaKecil))

    fun halo(jumlah: Int, ubah: (Int)->Int): Int{
        return (ubah(jumlah))
    }

    val angkaBesar = {value: Int->value.plus(10)}
    println(halo(10,angkaBesar))

    println(halo(50,{value: Int->value.div(10)}))
}