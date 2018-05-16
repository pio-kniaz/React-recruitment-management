import React from "react";
import List from "../List/List";
import axios from "axios";
import { CSVLink } from "react-csv";
import "./Builder.css";
class Builder extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      list: [],
      button: false
    };
  }

  componentDidMount() {
    axios.get("http://test.sknkonsultinguit.pl/welcome").then(response => {
      if (response.data.team.length <= 2) {
        this.setState({
          list: response.data.team,
          csv: response.data,
          button: true
        });
      } else {
        this.setState({
          list: response.data.team,
          csv: response.data,
          button: false
        });
      }
    });
  }
  deleteHandler = selectedItemToDel => {
    console.log(this.state.list.length);
    axios
      .delete(
        "http://test.sknkonsultinguit.pl/index.php/Pages/delete/" +
          selectedItemToDel.id
      )
      .then(response => {
        console.log(response);
      });
    let newItems = this.state.list.filter(item => {
      return item !== selectedItemToDel;
    });
    if (this.state.list.length <= 3) {
      this.setState({
        button: true,
        list: newItems
      });
    } else {
      this.setState(
        {
          list: newItems
        },
        () => {
          alert("Selected Item Delted From Database");
        }
      );
    }
  };
  render() {
    console.log(this.state.list);
    if (this.state.list.length > 1) {
      return (
        <div className="wrapper">
          <List
            deleteHandler={this.deleteHandler}
            data={this.state.list}
            disabled={this.state.button}
          />
          <CSVLink
            data={this.state.list}
            filename={"rekrutacja.csv"}
            className="btn btn-success btn-download"
            target="_blank"
          >
            CSV
            <span
              style={{
                display: "block"
              }}
            />
          </CSVLink>
        </div>
      );
    } else {
      return (
        <div className="wrapper">
          <h1
            style={{
              marginTop: "100px"
            }}
          >
            Brak rekordow w bazie danych
          </h1>
        </div>
      );
    }
  }
}
export default Builder;
