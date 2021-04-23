import 'package:rest_flutter/widgets/button_widget.dart';

class ButtonModel {
  String text;
  String colorBg;
  String color;
  String type;
  Function fun;

  ButtonModel.constructor(
      String text, String colorBg, String color, String type) {
    this.text = text;
    this.colorBg = colorBg;
    this.color = color;
    this.type = type;
    this.fun = ButtonWidget.build;
  }
}
