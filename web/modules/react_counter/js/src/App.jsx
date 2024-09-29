import { useState } from "react";

function App() {
  const [count, setCount] = useState(0);

  return (
    <>
      <h1>Counter: {count}</h1>
      <div>
        <button
          onClick={() => setCount((count) => count + 1)}
          className="counterBtn"
        >
          Increase
        </button>
        <button
          onClick={() => setCount((count) => count - 1)}
          className="counterBtn"
        >
          Decrease
        </button>
        <button
          onClick={() => setCount((count) => count === 0)}
          className="counterBtn"
        >
          Reset
        </button>
      </div>
    </>
  );
}

export default App;
