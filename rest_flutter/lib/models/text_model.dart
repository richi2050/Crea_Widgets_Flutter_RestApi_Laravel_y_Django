import 'package:rest_flutter/widgets/text_widget.dart';

class TextModel {
  String text;
  Function fun;

  TextModel.constructor(String text) {
    this.text = text;
    this.fun = TextWidget.build;
  }
}
