<?php



/**
 * This class defines the structure of the 'CategorieConsultation' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonCategorieConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCategorieConsultationTableMap';

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
        $this->setName('CategorieConsultation');
        $this->setPhpName('CommonCategorieConsultation');
        $this->setClassname('CommonCategorieConsultation');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'VARCHAR', true, 30, '');
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_es', 'LibelleEs', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_su', 'LibelleSu', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_du', 'LibelleDu', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_cz', 'LibelleCz', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 100, null);
        $this->addColumn('id_categorie_ANM', 'IdCategorieAnm', 'VARCHAR', true, 11, '0');
        $this->addColumn('libelle_it', 'LibelleIt', 'VARCHAR', false, 100, '');
        $this->addColumn('code', 'Code', 'VARCHAR', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonMarche', 'CommonMarche', RelationMap::ONE_TO_MANY, array('id' => 'natureMarche', ), null, null, 'CommonMarches');
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_nature_prestation', ), null, null, 'CommonExecContrats');
    } // buildRelations()

} // CommonCategorieConsultationTableMap
