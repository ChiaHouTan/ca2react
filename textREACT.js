import ReactDOM from 'react-dom'
import React from 'react'
import { Router, Route, browserHistory, IndexRoute  } from 'react-router'

ReactDOM.render(
    React.createElement(
      "h1",
      {"style": {"color": "blue"}},
      "Hello World"
    ),
    document.getElementById("root")
  );