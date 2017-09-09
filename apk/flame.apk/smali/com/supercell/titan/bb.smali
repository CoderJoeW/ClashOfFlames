.class Lcom/supercell/titan/bb;
.super Ljava/lang/Object;

# interfaces
.implements Ljava/lang/Runnable;


# instance fields
.field final synthetic a:Landroid/graphics/Typeface;

.field final synthetic b:Lcom/supercell/titan/ba;


# direct methods
.method constructor <init>(Lcom/supercell/titan/ba;Landroid/graphics/Typeface;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/bb;->b:Lcom/supercell/titan/ba;

    iput-object p2, p0, Lcom/supercell/titan/bb;->a:Landroid/graphics/Typeface;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    return-void
.end method


# virtual methods
.method public run()V
    .locals 2

    iget-object v0, p0, Lcom/supercell/titan/bb;->b:Lcom/supercell/titan/ba;

    iget-object v0, v0, Lcom/supercell/titan/ba;->b:Lcom/supercell/titan/aw;

    invoke-static {v0}, Lcom/supercell/titan/aw;->b(Lcom/supercell/titan/aw;)Lcom/supercell/titan/dk;

    move-result-object v0

    iget-object v1, p0, Lcom/supercell/titan/bb;->a:Landroid/graphics/Typeface;

    invoke-virtual {v0, v1}, Lcom/supercell/titan/dk;->setTypeface(Landroid/graphics/Typeface;)V

    return-void
.end method
