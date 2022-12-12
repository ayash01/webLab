const image = document.getElementById("img");
const txt = document.getElementById("text");
const txt2 = document.getElementById("text").textContent;
const heading = document.getElementById("h1").textContent;


image.addEventListener("mouseover", function () {
    h1.innerHTML = "Cricket";
    image.src = "Cricket.jpg";
    txt.textContent = `Cricket, is played throughout the world, particularly in Australia, India, Pakistan, the West Indies, and the
    British Isles. Cricket is played with a bat and ball and involves two competing teams of 11 players. The field
    is oval with a rectangular area in the middle, known as the pitch, that is 22 yards by 10 feet wide. Two sets of
    three sticks, called wickets, are set in the ground at each end of the pitch. Across the top of each wicket lie
    horizontal pieces called bails.
    The sides take turns at batting and bowling(pitching); each turn is called an “innings” (always plural). 
    Sides have one or two innings each, depending on the prearranged duration of the
    match, the object being to score the most runs. The bowlers, delivering the ball with a straight arm, try to
    break (hit) the wicket with the ball so that the bails fall. This is one of several ways that the batsman is
    dismissed, or put out.A bowler delivers six balls at one wicket, then a different player from his side bowls six
    balls to the opposite wicket. The batting side defends its wicket.`;
})

image.addEventListener("mouseout", function () {
    h1.textContent = heading;
    image.src = "Football.jpg"
    txt.textContent = txt2;
})
