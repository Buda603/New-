const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question('Введите натуральное число N: ', (answer) => {
  let N = parseInt(answer);
  let primes = [];
  
  for (let i = 2; i <= N; i++) {
    let isPrime = true;
    
    for (let j = 2; j <= Math.sqrt(i); j++) {
      if (i % j === 0) {
        isPrime = false;
        break;
      }
    }
    
    if (isPrime) {
      primes.push(i);
    }
  }
  
  console.log(`Простые числа до ${N}:`, primes.join(', '));
  rl.close();
});