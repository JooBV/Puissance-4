function getBotResponse(input) {
    //rock paper scissors
    if (input == "pierre") {
        return "papier";
    } else if (input == "papier") {
        return "ciseaux";
    } else if (input == "ciseaux") {
        return "pierre";
    }


        if (input == "J'adore Coder") {
            return "Moi aussi !";
        } else if (input == "❤️") {
            return "Moi aussi je m'aime";
        } else if (input == "ntm") {
            return "TOI MEME";
        }

        // Simple responses
        if (input == "Salut") {
            return "Bonjour !";
        } else if (input == "Aurevoir") {
            return "On se parle plus tard !";
        } else {
            return "Essayez de demander autre chose !";
        }

    }

// const responseObj = {
//   hello: "Hey ! How are you doing ?",
//   hey: "Hey! What's Up",
//   Date: new Date().toDateString(),
//   Heure: new Date().toLocaleTimeString(),
// };