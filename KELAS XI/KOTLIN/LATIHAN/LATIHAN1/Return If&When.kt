fun main() {
    fun halo(nama:String = ""): String{
        return if(nama == ""){
            "Halo Mas"
        }else{
            "Halo $nama"
        }
    }

    fun meme(angka1:Int, angka2:Int):Int {
        var total = angka1 + angka2
        return when (total){
             total -> total
             else -> 0
        }
    }

    println(halo())
    println(halo("Nyoman"))
    println()


    println(meme(20,32))
}