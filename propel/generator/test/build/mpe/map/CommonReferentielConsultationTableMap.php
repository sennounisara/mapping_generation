<?php



/**
 * This class defines the structure of the 'Referentiel_Consultation' table.
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
class CommonReferentielConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonReferentielConsultationTableMap';

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
        $this->setName('Referentiel_Consultation');
        $this->setPhpName('CommonReferentielConsultation');
        $this->setClassname('CommonReferentielConsultation');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 20, null);
        $this->addColumn('reference', 'Reference', 'INTEGER', true, 100, null);
        $this->addColumn('id_Lt_Referentiel', 'IdLtReferentiel', 'INTEGER', true, 100, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('valeur_Principale_Lt_Referentiel', 'ValeurPrincipaleLtReferentiel', 'LONGVARCHAR', true, null, null);
        $this->addColumn('valeur_Secondaire_Lt_Referentiel', 'ValeurSecondaireLtReferentiel', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonReferentielConsultationTableMap
