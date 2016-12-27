Stack = lambda items=[]: {
  'push' :     lambda item: items.append(item),
  'get_items': lambda: items
}

stack = Stack()
stack['push']('laranja')
stack['push']('uva')
stack['push']('morango')

print stack['get_items']()

# Python|JS -> Ruby / PHP
