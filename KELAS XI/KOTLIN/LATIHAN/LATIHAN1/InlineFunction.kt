//Inline Function
inline fun socute(name: () -> String): String{
       return "Hallo ${name()}"
   }

inline fun hai(jeneng: () -> String,
                noinline rai:()->String): String{
    return "Hello ${jeneng()} ${rai()}"

}

fun main() {
    println(socute { "JONI" })
    print("")
    println(socute { "SETYAWAN" })

    println(hai({"COLI"}, {"JONI"}))
}
