import React from "react";
import "./Item.css";
class Item extends React.Component {
  constructor(props) {
    super(props);
  }
  render() {
    console.log(this.props.data);
    return (
      <div className="container item-wrapper">
        <table className="table table-hover">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nazwisko</th>
              <th scope="col">Opis</th>
              <th scope="col">Wydzial</th>
              <th scope="col">Telefon</th>
              <th scope="col">Email</th>
              <th scope="col">Godziny</th>
              <th scope="col">Pub</th>
              <th scope="col">Dzial</th>
              <th scope="col">Projekt</th>
              <th scope="col">Rok</th>
              <th scope="col">🙉🙊🙈</th>
            </tr>
          </thead>
          {this.props.data}
        </table>
      </div>
    );
  }
}
export default Item;
