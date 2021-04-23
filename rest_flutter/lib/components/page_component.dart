import 'package:flutter/material.dart';

class PageComponent {
  List<Widget> buildWidgets(List model, Function fun) {
    List<Widget> widgets = List();
    model.forEach((model) {
      widgets.add(fun(model));
    });
    return widgets;
  }
}
