import 'package:flutter/cupertino.dart';
import 'package:rest_flutter/pages/chips_page.dart';
import 'package:flutter/material.dart';

class _DrawerItem {
  String title;
  IconData icon;
  String route;
  _DrawerItem({this.title, this.icon, this.route});
}

class CustomDrawer {
  static final _optionsItems = [
    _DrawerItem(title: 'Chip', icon: Icons.list, route: ChipsPage.ROUTE)
  ];

  static Widget getDrawer(BuildContext context) {
    List<Widget> items =
        _optionsItems.map((item) => _createItem(context, item)).toList();

    return Drawer(
      child: Column(
        children: <Widget>[
          UserAccountsDrawerHeader(
            decoration: BoxDecoration(color: Colors.blueGrey),
            accountEmail: Text("Sin email"),
            accountName: Text("Sin nombre"),
          ),
          Column(children: items)
        ],
      ),
    );
  }

  static Widget _createItem(BuildContext context, _DrawerItem item) {
    return ListTile(
      leading: Icon(item.icon),
      title: Text(item.title),
      onTap: () {
        Navigator.pop(context);
        Navigator.pushNamed(context, item.route);
      },
    );
  }
}
