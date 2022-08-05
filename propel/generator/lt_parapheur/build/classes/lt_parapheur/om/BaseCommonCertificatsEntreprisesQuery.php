<?php


/**
 * Base class that represents a query for the 'Certificats_Entreprises' table.
 *
 * 
 *
 * @method CommonCertificatsEntreprisesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCertificatsEntreprisesQuery orderByCertificat($order = Criteria::ASC) Order by the certificat column
 * @method CommonCertificatsEntreprisesQuery orderByDateDebut($order = Criteria::ASC) Order by the date_debut column
 * @method CommonCertificatsEntreprisesQuery orderByDateFin($order = Criteria::ASC) Order by the date_fin column
 * @method CommonCertificatsEntreprisesQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonCertificatsEntreprisesQuery orderByNomInscrit($order = Criteria::ASC) Order by the nom_inscrit column
 * @method CommonCertificatsEntreprisesQuery orderByPrenomInscrit($order = Criteria::ASC) Order by the prenom_inscrit column
 * @method CommonCertificatsEntreprisesQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonCertificatsEntreprisesQuery orderByStatutRevoque($order = Criteria::ASC) Order by the statut_revoque column
 * @method CommonCertificatsEntreprisesQuery orderByDateRevoquation($order = Criteria::ASC) Order by the date_revoquation column
 * @method CommonCertificatsEntreprisesQuery orderByMailInscrit($order = Criteria::ASC) Order by the mail_inscrit column
 *
 * @method CommonCertificatsEntreprisesQuery groupById() Group by the id column
 * @method CommonCertificatsEntreprisesQuery groupByCertificat() Group by the certificat column
 * @method CommonCertificatsEntreprisesQuery groupByDateDebut() Group by the date_debut column
 * @method CommonCertificatsEntreprisesQuery groupByDateFin() Group by the date_fin column
 * @method CommonCertificatsEntreprisesQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonCertificatsEntreprisesQuery groupByNomInscrit() Group by the nom_inscrit column
 * @method CommonCertificatsEntreprisesQuery groupByPrenomInscrit() Group by the prenom_inscrit column
 * @method CommonCertificatsEntreprisesQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonCertificatsEntreprisesQuery groupByStatutRevoque() Group by the statut_revoque column
 * @method CommonCertificatsEntreprisesQuery groupByDateRevoquation() Group by the date_revoquation column
 * @method CommonCertificatsEntreprisesQuery groupByMailInscrit() Group by the mail_inscrit column
 *
 * @method CommonCertificatsEntreprisesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCertificatsEntreprisesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCertificatsEntreprisesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCertificatsEntreprises findOne(PropelPDO $con = null) Return the first CommonCertificatsEntreprises matching the query
 * @method CommonCertificatsEntreprises findOneOrCreate(PropelPDO $con = null) Return the first CommonCertificatsEntreprises matching the query, or a new CommonCertificatsEntreprises object populated from the query conditions when no match is found
 *
 * @method CommonCertificatsEntreprises findOneByCertificat(string $certificat) Return the first CommonCertificatsEntreprises filtered by the certificat column
 * @method CommonCertificatsEntreprises findOneByDateDebut(string $date_debut) Return the first CommonCertificatsEntreprises filtered by the date_debut column
 * @method CommonCertificatsEntreprises findOneByDateFin(string $date_fin) Return the first CommonCertificatsEntreprises filtered by the date_fin column
 * @method CommonCertificatsEntreprises findOneByIdInscrit(int $id_inscrit) Return the first CommonCertificatsEntreprises filtered by the id_inscrit column
 * @method CommonCertificatsEntreprises findOneByNomInscrit(string $nom_inscrit) Return the first CommonCertificatsEntreprises filtered by the nom_inscrit column
 * @method CommonCertificatsEntreprises findOneByPrenomInscrit(string $prenom_inscrit) Return the first CommonCertificatsEntreprises filtered by the prenom_inscrit column
 * @method CommonCertificatsEntreprises findOneByIdEntreprise(int $id_entreprise) Return the first CommonCertificatsEntreprises filtered by the id_entreprise column
 * @method CommonCertificatsEntreprises findOneByStatutRevoque(string $statut_revoque) Return the first CommonCertificatsEntreprises filtered by the statut_revoque column
 * @method CommonCertificatsEntreprises findOneByDateRevoquation(string $date_revoquation) Return the first CommonCertificatsEntreprises filtered by the date_revoquation column
 * @method CommonCertificatsEntreprises findOneByMailInscrit(string $mail_inscrit) Return the first CommonCertificatsEntreprises filtered by the mail_inscrit column
 *
 * @method array findById(int $id) Return CommonCertificatsEntreprises objects filtered by the id column
 * @method array findByCertificat(string $certificat) Return CommonCertificatsEntreprises objects filtered by the certificat column
 * @method array findByDateDebut(string $date_debut) Return CommonCertificatsEntreprises objects filtered by the date_debut column
 * @method array findByDateFin(string $date_fin) Return CommonCertificatsEntreprises objects filtered by the date_fin column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonCertificatsEntreprises objects filtered by the id_inscrit column
 * @method array findByNomInscrit(string $nom_inscrit) Return CommonCertificatsEntreprises objects filtered by the nom_inscrit column
 * @method array findByPrenomInscrit(string $prenom_inscrit) Return CommonCertificatsEntreprises objects filtered by the prenom_inscrit column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonCertificatsEntreprises objects filtered by the id_entreprise column
 * @method array findByStatutRevoque(string $statut_revoque) Return CommonCertificatsEntreprises objects filtered by the statut_revoque column
 * @method array findByDateRevoquation(string $date_revoquation) Return CommonCertificatsEntreprises objects filtered by the date_revoquation column
 * @method array findByMailInscrit(string $mail_inscrit) Return CommonCertificatsEntreprises objects filtered by the mail_inscrit column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCertificatsEntreprisesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCertificatsEntreprisesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCertificatsEntreprises', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCertificatsEntreprisesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCertificatsEntreprisesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCertificatsEntreprisesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCertificatsEntreprisesQuery) {
            return $criteria;
        }
        $query = new CommonCertificatsEntreprisesQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonCertificatsEntreprises|CommonCertificatsEntreprises[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCertificatsEntreprisesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonCertificatsEntreprises A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonCertificatsEntreprises A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `certificat`, `date_debut`, `date_fin`, `id_inscrit`, `nom_inscrit`, `prenom_inscrit`, `id_entreprise`, `statut_revoque`, `date_revoquation`, `mail_inscrit` FROM `Certificats_Entreprises` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonCertificatsEntreprises();
            $obj->hydrate($row);
            CommonCertificatsEntreprisesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCertificatsEntreprises|CommonCertificatsEntreprises[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonCertificatsEntreprises[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID, $keys, Criteria::IN);
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
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificat('fooValue');   // WHERE certificat = 'fooValue'
     * $query->filterByCertificat('%fooValue%'); // WHERE certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByCertificat($certificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($certificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $certificat)) {
                $certificat = str_replace('*', '%', $certificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::CERTIFICAT, $certificat, $comparison);
    }

    /**
     * Filter the query on the date_debut column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebut('fooValue');   // WHERE date_debut = 'fooValue'
     * $query->filterByDateDebut('%fooValue%'); // WHERE date_debut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDebut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByDateDebut($dateDebut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDebut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDebut)) {
                $dateDebut = str_replace('*', '%', $dateDebut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::DATE_DEBUT, $dateDebut, $comparison);
    }

    /**
     * Filter the query on the date_fin column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFin('fooValue');   // WHERE date_fin = 'fooValue'
     * $query->filterByDateFin('%fooValue%'); // WHERE date_fin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByDateFin($dateFin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFin)) {
                $dateFin = str_replace('*', '%', $dateFin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::DATE_FIN, $dateFin, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the nom_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByNomInscrit('fooValue');   // WHERE nom_inscrit = 'fooValue'
     * $query->filterByNomInscrit('%fooValue%'); // WHERE nom_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByNomInscrit($nomInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomInscrit)) {
                $nomInscrit = str_replace('*', '%', $nomInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::NOM_INSCRIT, $nomInscrit, $comparison);
    }

    /**
     * Filter the query on the prenom_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomInscrit('fooValue');   // WHERE prenom_inscrit = 'fooValue'
     * $query->filterByPrenomInscrit('%fooValue%'); // WHERE prenom_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByPrenomInscrit($prenomInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomInscrit)) {
                $prenomInscrit = str_replace('*', '%', $prenomInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::PRENOM_INSCRIT, $prenomInscrit, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the statut_revoque column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutRevoque('fooValue');   // WHERE statut_revoque = 'fooValue'
     * $query->filterByStatutRevoque('%fooValue%'); // WHERE statut_revoque LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutRevoque The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByStatutRevoque($statutRevoque = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutRevoque)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutRevoque)) {
                $statutRevoque = str_replace('*', '%', $statutRevoque);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::STATUT_REVOQUE, $statutRevoque, $comparison);
    }

    /**
     * Filter the query on the date_revoquation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRevoquation('fooValue');   // WHERE date_revoquation = 'fooValue'
     * $query->filterByDateRevoquation('%fooValue%'); // WHERE date_revoquation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateRevoquation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByDateRevoquation($dateRevoquation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateRevoquation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateRevoquation)) {
                $dateRevoquation = str_replace('*', '%', $dateRevoquation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::DATE_REVOQUATION, $dateRevoquation, $comparison);
    }

    /**
     * Filter the query on the mail_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByMailInscrit('fooValue');   // WHERE mail_inscrit = 'fooValue'
     * $query->filterByMailInscrit('%fooValue%'); // WHERE mail_inscrit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailInscrit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function filterByMailInscrit($mailInscrit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailInscrit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailInscrit)) {
                $mailInscrit = str_replace('*', '%', $mailInscrit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatsEntreprisesPeer::MAIL_INSCRIT, $mailInscrit, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCertificatsEntreprises $commonCertificatsEntreprises Object to remove from the list of results
     *
     * @return CommonCertificatsEntreprisesQuery The current query, for fluid interface
     */
    public function prune($commonCertificatsEntreprises = null)
    {
        if ($commonCertificatsEntreprises) {
            $this->addUsingAlias(CommonCertificatsEntreprisesPeer::ID, $commonCertificatsEntreprises->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
