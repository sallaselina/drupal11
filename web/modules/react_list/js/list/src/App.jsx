import React, { useEffect, useState } from "react";

const App = () => {
  const [nodes, setNodes] = useState([]);

  useEffect(() => {
    fetch("/jsonapi/node/article")
      .then((response) => response.json())
      .then((data) => setNodes(data.data));
  }, []);
  return (
    <div>
      <h1>Article List</h1>
      <table>
        <tr>
          <th>Title</th>
          <th>Created at</th>
          <th>Body text</th>
          <th>Link to article</th>
        </tr>
        {nodes.map((node) => (
          <>
            <tr key={node.id}>
              <td>{node.attributes.title}</td>
              <td>{Date(node.attributes.created)}</td>
              <td>{node.attributes.body.value.slice(0, 50)}</td>
              <td>{node.links.self.href}</td>
            </tr>
          </>
        ))}
      </table>
    </div>
  );
};

export default App;
