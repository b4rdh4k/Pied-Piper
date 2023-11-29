(function(){
    function buildQuiz(){
      // variable to store the HTML output
      const output = [];
  
      // for each question...
      myQuestions.forEach(
        (currentQuestion, questionNumber) => {
  
          // variable to store the list of possible answers
          const answers = [];
  
          // and for each available answer...
          for(letter in currentQuestion.answers){
  
            // ...add an HTML radio button
            answers.push(
              `<label>
                <input type="radio" name="question${questionNumber}" value="${letter}">
                ${letter} :
                ${currentQuestion.answers[letter]}
              </label>`
            );
          }
  
          // add this question and its answers to the output
          output.push(
            `<div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join('')} </div>`
          );
        }
      );
  
      // finally combine our output list into one string of HTML and put it on the page
      quizContainer.innerHTML = output.join('');
    }
  
    function showResults(){
  
      // gather answer containers from our quiz
      const answerContainers = quizContainer.querySelectorAll('.answers');
  
      // keep track of user's answers
      let numCorrect = 0;
  
      // for each question...
      myQuestions.forEach( (currentQuestion, questionNumber) => {
  
        // find selected answer
        const answerContainer = answerContainers[questionNumber];
        const selector = `input[name=question${questionNumber}]:checked`;
        const userAnswer = (answerContainer.querySelector(selector) || {}).value;
  
        // if answer is correct
        if(userAnswer === currentQuestion.correctAnswer){
          // add to the number of correct answers
          numCorrect++;
  
          // color the answers green
          answerContainers[questionNumber].style.color = 'lightgreen';
        }
        // if answer is wrong or blank
        else{
          // color the answers red
          answerContainers[questionNumber].style.color = 'red';
        }
      });
  
      // show number of correct answers out of total
      resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
    }
  
    const quizContainer = document.getElementById('quiz');
    const resultsContainer = document.getElementById('results');
    const submitButton = document.getElementById('submit');
    const myQuestions = [
      {
        question: "1. What preceded Babastars?",
        answers: {
          a: "TDS",
          b: "Tingulli 3nt",
          c: "Skillzat"
        },
        correctAnswer: "b"
      },
      {
        question: "2. Who was the first to betray the group?",
        answers: {
          a: "Ledri Vula",
          b: "Agon Amigs",
          c: "Majk",
          d: "Cozman"
        },
        correctAnswer: "a"
      },
      {
        question: "3. How many songs are there in the 'High' series?",
        answers: {
          a: "1",
          b: "2",
          c: "3",
          d: "4",
          e: "5"
        },
        correctAnswer: "d"
      },
      {
        question: "4. Which member accused their affair partner for ruining his marriage?",
        answers: {
          a: "Skivi",
          b: "Majk",
          c: "Onat",
          d: "Agon Amiga"
        },
        correctAnswer: "d"
      },
      {
        question: "5. 'Krejt cka behet ne Prishtine?'",
        answers: {
          a: "Degjohet ne Gjilan.",
          b: "Mbetet ne Prishtine.",
          c: "Kthehet ne Prizren."
        },
        correctAnswer: "b"
      },
      {
        question: "6. Which member had a notorious relationship, similar to that of Teuta & Blero?",
        answers: {
          a: "Ghetto Geasy",
          b: "Cozman",
          c: "Majk",
          d: "Skivi"
        },
        correctAnswer: "b"
      },
      {
        question: "7. Who changed his rapper name when they joined Babastars?",
        answers: {
          a: "Ghetto Geasy",
          b: "Onat",
          c: "Majk",
          d: "Skivi",
          e: "Ledri Vula"
        },
        correctAnswer: "c"
      },
      {
        question: "8. What is Skivi's real name?",
        answers: {
          a: "Ledri Vula",
          b: "Getoar Shala",
          c: "Skender Tahiri",
          d: "Visar Shala",
        },
        correctAnswer: "d"
      },
      {
        question: "9. Kalle ___?",
        answers: {
          a: "Mbreme",
          b: "Sonte",
          c: "Neser",
          d: "Sot",
        },
        correctAnswer: "b"
      },
      {
        question: "10. Which duo has a tendency to repeat words?",
        answers: {
          a: "Majk and Onat",
          b: "Agon Amiga and Cozman",
          c: "Skivi and Ghetto Geasy",
          d: "Ghetto Geasy and Cozman",
          e: "Agon Amiga and Onat"
        },
        correctAnswer: "e"
      },

    ];
  
    // Kick things off
    buildQuiz();
  
    // Event listeners
    submitButton.addEventListener('click', showResults);
  })();