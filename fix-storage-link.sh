#!/bin/bash

[ -L public/storage ] && echo "🔗 Link simbólico existe." || echo "⚠️ Link simbólico NÃO existe."

if [ -L public/storage ] && [ ! -e public/storage ]; then
  echo "⚠️ Link quebrado detectado! Removendo..."
  rm public/storage
fi

if [ ! -e public/storage ]; then
  echo "🔄 Criando o link simbólico..."
  php artisan storage:link
else
  echo "✅ Tudo certo! Link simbólico funcional."
fi
