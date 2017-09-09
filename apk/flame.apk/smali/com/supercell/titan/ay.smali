.class Lcom/supercell/titan/ay;
.super Ljava/lang/Object;

# interfaces
.implements Landroid/view/View$OnClickListener;


# instance fields
.field final synthetic a:Lcom/supercell/titan/aw;


# direct methods
.method constructor <init>(Lcom/supercell/titan/aw;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/ay;->a:Lcom/supercell/titan/aw;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    return-void
.end method


# virtual methods
.method public onClick(Landroid/view/View;)V
    .locals 2

    iget-object v0, p0, Lcom/supercell/titan/ay;->a:Lcom/supercell/titan/aw;

    invoke-static {v0}, Lcom/supercell/titan/aw;->a(Lcom/supercell/titan/aw;)Lcom/supercell/titan/GameApp;

    move-result-object v0

    new-instance v1, Lcom/supercell/titan/az;

    invoke-direct {v1, p0}, Lcom/supercell/titan/az;-><init>(Lcom/supercell/titan/ay;)V

    invoke-virtual {v0, v1}, Lcom/supercell/titan/GameApp;->a(Ljava/lang/Runnable;)V

    return-void
.end method
