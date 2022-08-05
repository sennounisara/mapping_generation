<?php



/**
 * This class defines the structure of the 'demande_achat_par_catalogue_article' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonDemandeAchatParCatalogueArticleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonDemandeAchatParCatalogueArticleTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('demande_achat_par_catalogue_article');
        $this->setPhpName('CommonDemandeAchatParCatalogueArticle');
        $this->setClassname('CommonDemandeAchatParCatalogueArticle');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_demande', 'IdDemande', 'INTEGER', true, null, null);
        $this->addPrimaryKey('id_article', 'IdArticle', 'INTEGER', true, null, null);
        $this->addColumn('id_bon_commande', 'IdBonCommande', 'INTEGER', false, null, null);
        $this->addColumn('quantite', 'Quantite', 'INTEGER', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDemandeAchatParCatalogueArticleTableMap
