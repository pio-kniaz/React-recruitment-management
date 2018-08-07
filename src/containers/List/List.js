import React from "react";
import Item from "./Item/Item";
class List extends React.Component {
  constructor(props) {
    super(props);
  }
  render() {
    // console.log("pokaz ile rekordow", this.props.data.length);
    const { data, deleteHandler, disabled } = this.props;
    // console.log("button", disabled);
    const items = data.map((elem, index) => {
      return (
        <tbody key={index}>
          <tr className="table-active ">
            <td>{elem.id}</td>
            <td>{elem.nazwisko}</td>
            <td>{elem.opis}</td>
            <td>{elem.wydzial}</td>
            <td>{elem.telefon}</td>
            <td>{elem.email}</td>
            <td>{elem.godziny}</td>
            <td>{elem.pub}</td>
            <td>{elem.dzial}</td>
            <td>{elem.projekt}</td>
            <td>{elem.rok}</td>
            <td>
              <button
                disabled={this.props.disabled}
                className="btn btn-danger"
                onClick={this.props.deleteHandler.bind(this, elem)}
              >
                Delete
              </button>
            </td>
          </tr>
        </tbody>
      );
    });
    return (
      <div>
        <Item data={items} />
      </div>
    );
  }
}
export default List;
