// Define the tour!
var tour = {
    id: "hello-hopscotch",
    steps: [
      {
        title: "My Header",
        content: "This is the header of my page.",
        target: "sectorslinks",
        placement: "right"
      },
      {
        title: "My content",
        content: "Here is where I put my content.",
        target: document.querySelector("#sectorss"),
        placement: "bottom"
      }
    ]
  };

  // Start the tour!
  hopscotch.startTour(tour);
      