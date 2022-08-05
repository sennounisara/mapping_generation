<?php



/**
 * This class defines the structure of the 'Partenaire' table.
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
class CommonPartenaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonPartenaireTableMap';

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
        $this->setName('Partenaire');
        $this->setPhpName('CommonPartenaire');
        $this->setClassname('CommonPartenaire');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('initials', 'Initials', 'VARCHAR', true, 30, null);
        $this->addColumn('desc_partenaire', 'DescPartenaire', 'LONGVARCHAR', true, null, null);
        $this->addColumn('desc_partenaire_fr', 'DescPartenaireFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('desc_partenaire_en', 'DescPartenaireEn', 'LONGVARCHAR', false, null, null);
        $this->addColumn('desc_partenaire_es', 'DescPartenaireEs', 'LONGVARCHAR', false, null, null);
        $this->addColumn('desc_partenaire_it', 'DescPartenaireIt', 'LONGVARCHAR', false, null, null);
        $this->addColumn('desc_partenaire_ar', 'DescPartenaireAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('desc_partenaire_su', 'DescPartenaireSu', 'LONGVARCHAR', false, null, null);
        $this->addColumn('lien_img', 'LienImg', 'LONGVARCHAR', true, null, null);
        $this->addColumn('lien_externe', 'LienExterne', 'LONGVARCHAR', true, null, null);
        $this->addColumn('title', 'Title', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonPartenaireTableMap
