import 'package:flutter/material.dart';
import 'package:rest_flutter/components/page_component.dart';
import 'package:rest_flutter/models/button_model.dart';
import 'package:rest_flutter/utils/custom_drawer.dart';
import 'package:rest_flutter/widgets/button_widget.dart';

class ButtonsPage extends StatelessWidget with PageComponent {
  static const String ROUTE = '/buttons';
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text('buttonPages'),
        ),
        drawer: CustomDrawer.getDrawer(context),
        body: Column(
          children: buildWidgets(getData(), ButtonWidget.build),
        ));
  }

  /*
   * Obtiene la data y compone el modelo
   */
  List<ButtonModel> getData() {
    List<ButtonModel> buttonModels = List();

    for (int i = 0; i < 3; i++)
      buttonModels.add(
          ButtonModel.constructor("Flat $i", "FFFF0000", "FFFFFFFF", 'flat'));

    for (int i = 0; i < 3; i++)
      buttonModels.add(ButtonModel.constructor(
          "Raiser $i", "FF00FF00", "FFFFFFFF", 'raised'));

    return buttonModels;
  }
}
