import 'package:flutter/material.dart';
import 'package:rest_flutter/components/page_component.dart';
import 'package:rest_flutter/models/button_model.dart';
import 'package:rest_flutter/models/chip_model.dart';
import 'package:rest_flutter/models/text_model.dart';
import 'package:rest_flutter/utils/custom_drawer.dart';
import 'package:rest_flutter/widgets/button_widget.dart';

class MixPage extends StatelessWidget with PageComponent {
  static const String ROUTE = '/mix';

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("ButtonPage"),
      ),
      drawer: CustomDrawer.getDrawer(context),
      body: Column(children: _buildWidget()),
    );
  }

  List<Widget> _buildWidget() {
    List models = getData();

    List<Widget> widgets = List();
    models.forEach((model) {
      widgets.add(model.fun(model));
    });

    return widgets;
  }

  /*
    * Obtiene la data y compone el modelo
   */

  List getData() {
    List models = List();

    for (int i = 0; i < 3; i++)
      models.add(
          ButtonModel.constructor("Flat $i", "FFFF0000", "FFFFFFFF", "flat"));

    for (int i = 0; i < 2; i++)
      models.add(ChipModel.constructor(
          "FFFFFFFF", "FFFF0000", "Pepe $i", "access_alarm"));

    for (int i = 0; i < 2; i++)
      models.add(ButtonModel.constructor(
          "Raised $i", "FF00FF00", "FFFFFFFF", "raised"));

    for (int i = 0; i < 2; i++)
      models.add(TextModel.constructor(
          "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, consequatur nesciunt! Inventore mollitia necessitatibus incidunt quos sint placeat nobis saepe id maiores aspernatur temporibus explicabo odio sunt, accusamus earum libero! cosa"));

    return models;
  }
}
