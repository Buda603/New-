function countLettersAfter(str, sim) {
    const index = str.indexOf(sim);
    
    if (index === -1) {
        return -1; 
    }
    return str.length - index - 1;
}
const testString = "Hello; world!";
const result = countLettersAfter(testString, ";");

console.log(`Строка: "${testString}"`);
console.log(`Количество символов после ';': ${result}`);