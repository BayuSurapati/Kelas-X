fun main() {
    fun sayHello(nilai: String, transformer: (String) -> String): String {
        val transformNama = transformer(nilai)
        return "Halo ${transformer(nilai)}"
    }
        val anonimUpper = fun(a: String): String {
            if (a == ""){
                return "kosong"
            }
            return "halo ${a.uppercase()}"
        }

        println(sayHello("Nyoman", anonimUpper))
        println(sayHello("", anonimUpper))

    println(sayHello("BAYU KONSOL", fun(a: String): String {
        if (a == ""){
            return "kosong"
        }
        return a.lowercase()
    }))
}
