<?php


/**
 * Base class that represents a query for the 'registre_depot_correction' table.
 *
 * 
 *
 * @method CommonRegistreDepotCorrectionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonRegistreDepotCorrectionQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonRegistreDepotCorrectionQuery orderByIdOffre($order = Criteria::ASC) Order by the id_offre column
 * @method CommonRegistreDepotCorrectionQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonRegistreDepotCorrectionQuery orderByNomEntreprise($order = Criteria::ASC) Order by the nom_entreprise column
 * @method CommonRegistreDepotCorrectionQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonRegistreDepotCorrectionQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonRegistreDepotCorrectionQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method CommonRegistreDepotCorrectionQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonRegistreDepotCorrectionQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method CommonRegistreDepotCorrectionQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonRegistreDepotCorrectionQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonRegistreDepotCorrectionQuery orderByCodePostal($order = Criteria::ASC) Order by the code_postal column
 * @method CommonRegistreDepotCorrectionQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonRegistreDepotCorrectionQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonRegistreDepotCorrectionQuery orderByVilleRc($order = Criteria::ASC) Order by the ville_rc column
 * @method CommonRegistreDepotCorrectionQuery orderByNumeroRc($order = Criteria::ASC) Order by the numero_rc column
 * @method CommonRegistreDepotCorrectionQuery orderByIdentifiantNational($order = Criteria::ASC) Order by the identifiant_national column
 * @method CommonRegistreDepotCorrectionQuery orderByIfuEntreprise($order = Criteria::ASC) Order by the ifu_entreprise column
 *
 * @method CommonRegistreDepotCorrectionQuery groupById() Group by the id column
 * @method CommonRegistreDepotCorrectionQuery groupByOrganisme() Group by the organisme column
 * @method CommonRegistreDepotCorrectionQuery groupByIdOffre() Group by the id_offre column
 * @method CommonRegistreDepotCorrectionQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonRegistreDepotCorrectionQuery groupByNomEntreprise() Group by the nom_entreprise column
 * @method CommonRegistreDepotCorrectionQuery groupByNom() Group by the nom column
 * @method CommonRegistreDepotCorrectionQuery groupByPrenom() Group by the prenom column
 * @method CommonRegistreDepotCorrectionQuery groupByMail() Group by the mail column
 * @method CommonRegistreDepotCorrectionQuery groupByAdresse() Group by the adresse column
 * @method CommonRegistreDepotCorrectionQuery groupByAdresse2() Group by the adresse2 column
 * @method CommonRegistreDepotCorrectionQuery groupByTelephone() Group by the telephone column
 * @method CommonRegistreDepotCorrectionQuery groupByFax() Group by the fax column
 * @method CommonRegistreDepotCorrectionQuery groupByCodePostal() Group by the code_postal column
 * @method CommonRegistreDepotCorrectionQuery groupByVille() Group by the ville column
 * @method CommonRegistreDepotCorrectionQuery groupByPays() Group by the pays column
 * @method CommonRegistreDepotCorrectionQuery groupByVilleRc() Group by the ville_rc column
 * @method CommonRegistreDepotCorrectionQuery groupByNumeroRc() Group by the numero_rc column
 * @method CommonRegistreDepotCorrectionQuery groupByIdentifiantNational() Group by the identifiant_national column
 * @method CommonRegistreDepotCorrectionQuery groupByIfuEntreprise() Group by the ifu_entreprise column
 *
 * @method CommonRegistreDepotCorrectionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonRegistreDepotCorrectionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonRegistreDepotCorrectionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonRegistreDepotCorrection findOne(PropelPDO $con = null) Return the first CommonRegistreDepotCorrection matching the query
 * @method CommonRegistreDepotCorrection findOneOrCreate(PropelPDO $con = null) Return the first CommonRegistreDepotCorrection matching the query, or a new CommonRegistreDepotCorrection object populated from the query conditions when no match is found
 *
 * @method CommonRegistreDepotCorrection findOneById(int $id) Return the first CommonRegistreDepotCorrection filtered by the id column
 * @method CommonRegistreDepotCorrection findOneByOrganisme(string $organisme) Return the first CommonRegistreDepotCorrection filtered by the organisme column
 * @method CommonRegistreDepotCorrection findOneByIdOffre(int $id_offre) Return the first CommonRegistreDepotCorrection filtered by the id_offre column
 * @method CommonRegistreDepotCorrection findOneByConsultationRef(int $consultation_ref) Return the first CommonRegistreDepotCorrection filtered by the consultation_ref column
 * @method CommonRegistreDepotCorrection findOneByNomEntreprise(string $nom_entreprise) Return the first CommonRegistreDepotCorrection filtered by the nom_entreprise column
 * @method CommonRegistreDepotCorrection findOneByNom(string $nom) Return the first CommonRegistreDepotCorrection filtered by the nom column
 * @method CommonRegistreDepotCorrection findOneByPrenom(string $prenom) Return the first CommonRegistreDepotCorrection filtered by the prenom column
 * @method CommonRegistreDepotCorrection findOneByMail(string $mail) Return the first CommonRegistreDepotCorrection filtered by the mail column
 * @method CommonRegistreDepotCorrection findOneByAdresse(string $adresse) Return the first CommonRegistreDepotCorrection filtered by the adresse column
 * @method CommonRegistreDepotCorrection findOneByAdresse2(string $adresse2) Return the first CommonRegistreDepotCorrection filtered by the adresse2 column
 * @method CommonRegistreDepotCorrection findOneByTelephone(string $telephone) Return the first CommonRegistreDepotCorrection filtered by the telephone column
 * @method CommonRegistreDepotCorrection findOneByFax(string $fax) Return the first CommonRegistreDepotCorrection filtered by the fax column
 * @method CommonRegistreDepotCorrection findOneByCodePostal(string $code_postal) Return the first CommonRegistreDepotCorrection filtered by the code_postal column
 * @method CommonRegistreDepotCorrection findOneByVille(string $ville) Return the first CommonRegistreDepotCorrection filtered by the ville column
 * @method CommonRegistreDepotCorrection findOneByPays(string $pays) Return the first CommonRegistreDepotCorrection filtered by the pays column
 * @method CommonRegistreDepotCorrection findOneByVilleRc(string $ville_rc) Return the first CommonRegistreDepotCorrection filtered by the ville_rc column
 * @method CommonRegistreDepotCorrection findOneByNumeroRc(string $numero_rc) Return the first CommonRegistreDepotCorrection filtered by the numero_rc column
 * @method CommonRegistreDepotCorrection findOneByIdentifiantNational(string $identifiant_national) Return the first CommonRegistreDepotCorrection filtered by the identifiant_national column
 * @method CommonRegistreDepotCorrection findOneByIfuEntreprise(string $ifu_entreprise) Return the first CommonRegistreDepotCorrection filtered by the ifu_entreprise column
 *
 * @method array findById(int $id) Return CommonRegistreDepotCorrection objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonRegistreDepotCorrection objects filtered by the organisme column
 * @method array findByIdOffre(int $id_offre) Return CommonRegistreDepotCorrection objects filtered by the id_offre column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonRegistreDepotCorrection objects filtered by the consultation_ref column
 * @method array findByNomEntreprise(string $nom_entreprise) Return CommonRegistreDepotCorrection objects filtered by the nom_entreprise column
 * @method array findByNom(string $nom) Return CommonRegistreDepotCorrection objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonRegistreDepotCorrection objects filtered by the prenom column
 * @method array findByMail(string $mail) Return CommonRegistreDepotCorrection objects filtered by the mail column
 * @method array findByAdresse(string $adresse) Return CommonRegistreDepotCorrection objects filtered by the adresse column
 * @method array findByAdresse2(string $adresse2) Return CommonRegistreDepotCorrection objects filtered by the adresse2 column
 * @method array findByTelephone(string $telephone) Return CommonRegistreDepotCorrection objects filtered by the telephone column
 * @method array findByFax(string $fax) Return CommonRegistreDepotCorrection objects filtered by the fax column
 * @method array findByCodePostal(string $code_postal) Return CommonRegistreDepotCorrection objects filtered by the code_postal column
 * @method array findByVille(string $ville) Return CommonRegistreDepotCorrection objects filtered by the ville column
 * @method array findByPays(string $pays) Return CommonRegistreDepotCorrection objects filtered by the pays column
 * @method array findByVilleRc(string $ville_rc) Return CommonRegistreDepotCorrection objects filtered by the ville_rc column
 * @method array findByNumeroRc(string $numero_rc) Return CommonRegistreDepotCorrection objects filtered by the numero_rc column
 * @method array findByIdentifiantNational(string $identifiant_national) Return CommonRegistreDepotCorrection objects filtered by the identifiant_national column
 * @method array findByIfuEntreprise(string $ifu_entreprise) Return CommonRegistreDepotCorrection objects filtered by the ifu_entreprise column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonRegistreDepotCorrectionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonRegistreDepotCorrectionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonRegistreDepotCorrection', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonRegistreDepotCorrectionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonRegistreDepotCorrectionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonRegistreDepotCorrectionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonRegistreDepotCorrectionQuery) {
            return $criteria;
        }
        $query = new CommonRegistreDepotCorrectionQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonRegistreDepotCorrection|CommonRegistreDepotCorrection[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonRegistreDepotCorrectionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonRegistreDepotCorrection A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_offre`, `consultation_ref`, `nom_entreprise`, `nom`, `prenom`, `mail`, `adresse`, `adresse2`, `telephone`, `fax`, `code_postal`, `ville`, `pays`, `ville_rc`, `numero_rc`, `identifiant_national`, `ifu_entreprise` FROM `registre_depot_correction` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonRegistreDepotCorrection();
            $obj->hydrate($row);
            CommonRegistreDepotCorrectionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonRegistreDepotCorrection|CommonRegistreDepotCorrection[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonRegistreDepotCorrection[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonRegistreDepotCorrectionPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonRegistreDepotCorrectionPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOffre(1234); // WHERE id_offre = 1234
     * $query->filterByIdOffre(array(12, 34)); // WHERE id_offre IN (12, 34)
     * $query->filterByIdOffre(array('min' => 12)); // WHERE id_offre >= 12
     * $query->filterByIdOffre(array('max' => 12)); // WHERE id_offre <= 12
     * </code>
     *
     * @param     mixed $idOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ID_OFFRE, $idOffre, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the nom_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntreprise('fooValue');   // WHERE nom_entreprise = 'fooValue'
     * $query->filterByNomEntreprise('%fooValue%'); // WHERE nom_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByNomEntreprise($nomEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntreprise)) {
                $nomEntreprise = str_replace('*', '%', $nomEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::NOM_ENTREPRISE, $nomEntreprise, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2('fooValue');   // WHERE adresse2 = 'fooValue'
     * $query->filterByAdresse2('%fooValue%'); // WHERE adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByAdresse2($adresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2)) {
                $adresse2 = str_replace('*', '%', $adresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::ADRESSE2, $adresse2, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostal('fooValue');   // WHERE code_postal = 'fooValue'
     * $query->filterByCodePostal('%fooValue%'); // WHERE code_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByCodePostal($codePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostal)) {
                $codePostal = str_replace('*', '%', $codePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::CODE_POSTAL, $codePostal, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the pays column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE pays = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByPays($pays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pays)) {
                $pays = str_replace('*', '%', $pays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the ville_rc column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleRc('fooValue');   // WHERE ville_rc = 'fooValue'
     * $query->filterByVilleRc('%fooValue%'); // WHERE ville_rc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeRc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByVilleRc($villeRc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeRc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeRc)) {
                $villeRc = str_replace('*', '%', $villeRc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::VILLE_RC, $villeRc, $comparison);
    }

    /**
     * Filter the query on the numero_rc column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroRc('fooValue');   // WHERE numero_rc = 'fooValue'
     * $query->filterByNumeroRc('%fooValue%'); // WHERE numero_rc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroRc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByNumeroRc($numeroRc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroRc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroRc)) {
                $numeroRc = str_replace('*', '%', $numeroRc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::NUMERO_RC, $numeroRc, $comparison);
    }

    /**
     * Filter the query on the identifiant_national column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantNational('fooValue');   // WHERE identifiant_national = 'fooValue'
     * $query->filterByIdentifiantNational('%fooValue%'); // WHERE identifiant_national LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantNational The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByIdentifiantNational($identifiantNational = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantNational)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantNational)) {
                $identifiantNational = str_replace('*', '%', $identifiantNational);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::IDENTIFIANT_NATIONAL, $identifiantNational, $comparison);
    }

    /**
     * Filter the query on the ifu_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIfuEntreprise('fooValue');   // WHERE ifu_entreprise = 'fooValue'
     * $query->filterByIfuEntreprise('%fooValue%'); // WHERE ifu_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ifuEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function filterByIfuEntreprise($ifuEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ifuEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ifuEntreprise)) {
                $ifuEntreprise = str_replace('*', '%', $ifuEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRegistreDepotCorrectionPeer::IFU_ENTREPRISE, $ifuEntreprise, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonRegistreDepotCorrection $commonRegistreDepotCorrection Object to remove from the list of results
     *
     * @return CommonRegistreDepotCorrectionQuery The current query, for fluid interface
     */
    public function prune($commonRegistreDepotCorrection = null)
    {
        if ($commonRegistreDepotCorrection) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonRegistreDepotCorrectionPeer::ID), $commonRegistreDepotCorrection->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonRegistreDepotCorrectionPeer::ORGANISME), $commonRegistreDepotCorrection->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
