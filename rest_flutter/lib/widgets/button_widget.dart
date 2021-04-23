import 'package:flutter/material.dart';
import 'package:rest_flutter/models/button_model.dart';

/* Esta clase solo se va a encargar de construir uyn chip por vez */

class ButtonWidget {
  //static final ButtonModel buttonModel;
  //const ButtonWidget(this.buttonModel);

  static Widget build(ButtonModel buttonModel) {
    return buildWidget(buttonModel);
  }

  static Widget buildWidget(ButtonModel buttonModel) {
    switch (buttonModel.type) {
      case "flat":
        return FlatButton(
          color: Color(int.parse(buttonModel.colorBg, radix: 16)),
          textColor: Color(int.parse(buttonModel.color, radix: 16)),
          splashColor: Color(int.parse(buttonModel.color, radix: 16)),
          child: Text(buttonModel.text),
          onPressed: () {},
        );
      //case 'raised':
      default:
        return RaisedButton(
          color: Color(int.parse(buttonModel.colorBg, radix: 16)),
          textColor: Color(int.parse(buttonModel.color, radix: 16)),
          splashColor: Color(int.parse(buttonModel.color, radix: 16)),
          child: Text(buttonModel.text),
          onPressed: () {},
        );
    }
  }
}
