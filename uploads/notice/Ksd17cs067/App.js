import {useState} from "react";
import ReactDOM from 'react-dom/client';
function App() {
  const [equation, setName]=useState("");
  const handleSubmit= (event)=> {
     event.preventDefault();
     var sum=document.getElementById('equationn').value;
     var y=eval(sum);
     alert(`the solution of your mathematical expression ${equation} = ${y}`)
     }

  return (<form onSubmit={handleSubmit}>
  <label>enter your mathematical expression:
  <input type="text" id="equationn" value={equation} onChange={(e) =>setName(e.target.value)} />
  </label>
  <input value = "submit" type="submit"/>
  </form>
  )
}

export default App;
