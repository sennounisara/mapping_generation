<?php



/**
 * This class defines the structure of the 'historiques_consultation' table.
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
class CommonHistoriquesConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonHistoriquesConsultationTableMap';

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
        $this->setName('historiques_consultation');
        $this->setPhpName('CommonHistoriquesConsultation');
        $this->setClassname('CommonHistoriquesConsultation');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 50, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('ref_consultation', 'RefConsultation', 'INTEGER', true, 50, 0);
        $this->addColumn('statut', 'Statut', 'CHAR', true, null, '');
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, 50, 0);
        $this->addColumn('nom_agent', 'NomAgent', 'VARCHAR', true, 250, '');
        $this->addColumn('prenom_agent', 'PrenomAgent', 'VARCHAR', true, 250, '');
        $this->addColumn('nom_element', 'NomElement', 'VARCHAR', true, 250, '');
        $this->addColumn('valeur', 'Valeur', 'VARCHAR', true, 250, '');
        $this->addColumn('valeur_detail_1', 'ValeurDetail1', 'VARCHAR', true, 250, '');
        $this->addColumn('valeur_detail_2', 'ValeurDetail2', 'VARCHAR', true, 250, '');
        $this->addColumn('numero_lot', 'NumeroLot', 'VARCHAR', true, 250, '');
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', false, null, null);
        $this->addColumn('untrusteddate', 'Untrusteddate', 'VARCHAR', false, 20, '0000-00-00 00:00:00');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonHistoriquesConsultationTableMap
